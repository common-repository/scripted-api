<?php

namespace Scripted\Tools;

use Scripted\WordPressApi;
use WP_Post;

class ContentFormatter
{
    /**
     * Attempts to update the content of a given post based on Scripted business
     * logic.
     *
     * @param WP_Post $post
     * @param string  $content
     *
     * @return WP_Post
     */
    public static function setPostContent(WP_Post $post, $content)
    {
        $post->post_content = WordPressApi::importAndReplaceContentImages($content);

        return $post;
    }

    /**
     * Removes leading and trailing quotes from give string.
     *
     * @param  string $title
     *
     * @return string
     */
    public static function trimQuotes($title)
    {
        return trim(trim((string) $title, "'"), '"');
    }
}
