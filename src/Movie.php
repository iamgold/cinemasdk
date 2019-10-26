<?php

namespace iamgold\cinema;

/**
 * This class is used to access movie API.
 *
 * @author Eric Huang <iamgold0105@gmail.com>
 * @version 1.0.0
 * @since 2.0.0
 */
class Movie extends BaseObject
{
    /**
     * @var string API PATH
     */
    protected $apiPath = 'api/api_movie.php';

    /**
     * @var array $methods
     */
    protected $methods = [
        'getMovieGroups',
        'getMovies',
        'getStageByMovie',
        'getStagesByMovieGroup'
    ];
}
