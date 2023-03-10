<?php

namespace Yoast\WP\SEO\Presentations;

use Yoast\WP\SEO\Helpers\Pagination_Helper;
use Yoast\WP\SEO\Models\Indexable;

/**
 * Class Archive_Adjacent.
 *
 * Presentation object for indexables.
 *
 * @property Indexable         $model      The indexable.
 * @property Pagination_Helper $pagination The pagination helper. Should be defined in the parent
 *                                         class because of trait issues in PHP 5.6.
 *                                         For a detailed explanation of the issue, see
 *                                         {@link https://github.com/Yoast/wordpress-seo/pull/18820}.
 */
trait Archive_Adjacent {

	/**
	 * Sets the helpers for the trait.
	 *
	 * @required
	 *
	 * @codeCoverageIgnore
	 *
	 * @param Pagination_Helper $pagination The pagination helper.
	 */
	public function set_archive_adjacent_helpers( Pagination_Helper $pagination ) {
		$this->pagination = $pagination;
	}

	/**
	 * Generates the rel prev.
	 *
	 * @return string
	 */
	public function generate_rel_prev() {
		if ( $this->pagination->is_rel_adjacent_disabled() ) {
			return '';
		}

		$current_page = \max( 1, $this->pagination->get_current_archive_page_number() );
		// Check if there is a previous page.
		if ( $current_page === 1 ) {
			return '';
		}
		// Check if the previous page is the first page.
		if ( $current_page === 2 ) {
			return $this->permalink;
		}

		return $this->pagination->get_paginated_url( $this->permalink, ( $current_page - 1 ) );
	}

	/**
	 * Generates the rel next.
	 *
	 * @return string
	 */
	public function generate_rel_next() {
		if ( $this->pagination->is_rel_adjacent_disabled() ) {
			return '';
		}

		$current_page = \max( 1, $this->pagination->get_current_archive_page_number() );
		if ( $this->pagination->get_number_of_archive_pages() <= $current_page ) {
			return '';
		}

		return $this->pagination->get_paginated_url( $this->permalink, ( $current_page + 1 ) );
	}
}
