<?php

/**
 * @group formatting
 *
 * @covers ::sanitize_user
 */
class Tests_Formatting_SanitizeUser extends WP_UnitTestCase {
	public function test_strips_html() {
		$input    = 'Captain <strong>Awesome</strong>';
		$expected = is_multisite() ? 'captain awesome' : 'Captain Awesome';
		$this->assertSame( $expected, sanitize_user( $input ) );
	}

	public function test_strips_encoded_ampersand() {
		$expected = 'ATT';

		// Multisite forces user logins to lowercase.
		if ( is_multisite() ) {
			$expected = strtolower( $expected );
		}

		$this->assertSame( $expected, sanitize_user( 'AT&amp;T' ) );
	}

	public function test_strips_encoded_ampersand_when_followed_by_semicolon() {
		if ( ! function_exists( 'mb_str_split' ) ) {
			$this->markTestSkipped( 'PHP 7.2/3 lacks mb_str_split' );
		}
		$expected = 'ATT Test;';

		// Multisite forces user logins to lowercase.
		if ( is_multisite() ) {
			$expected = strtolower( $expected );
		}

		$this->assertSame( $expected, sanitize_user( 'AT&amp;T Test;' ) );
	}

	/*
	 * @ticket 31992
	 */

	public function test_strips_percent_encoded_octets() {
		if ( ! function_exists( 'mb_str_split' ) ) {
			$this->markTestSkipped( 'PHP 7.2/3 lacks mb_str_split' );
		}
		$expected = is_multisite() ? 'françois' : 'François';
		$this->assertSame( $expected, sanitize_user( 'Fran%c3%a7ois' ) );
	}

	public function test_optional_strict_mode_reduces_to_safe_ascii_subset() {
		$this->assertSame( 'abc', sanitize_user( '()~ab~ˆcˆ!', true ) );
	}

	public function test_accepts_all_arabic() {
		if ( ! function_exists( 'mb_str_split' ) ) {
			$this->markTestSkipped( 'PHP 7.2/3 lacks mb_str_split' );
		}
		$expected = 'آرنت';
		$encoded  = '%D8%A2%D8%B1%D9%86%D8%AA';

		$this->assertSame( $expected, sanitize_user( $expected ) );
		$this->assertSame( $expected, sanitize_user( $encoded ) );
	}

	/*
	 * @ticket 31992
	 */

	public function test_accepts_west_african_latin() {
		if ( ! function_exists( 'mb_str_split' ) ) {
			$this->markTestSkipped( 'PHP 7.2/3 lacks mb_str_split' );
		}
		$expected = 'tɔnatɔn';
		$encoded  = 't%C9%94nat%C9%94n';

		$this->assertSame( $expected, sanitize_user( $expected ) );
		$this->assertSame( $expected, sanitize_user( $encoded ) );
	}

	/*
	 * @ticket 31992
	 */

	public function test_blocks_latin_cyrillic_mixed_name() {
		$this->assertSame( 'arn', sanitize_user( 'arn%D1%82' ) );
	}
}
