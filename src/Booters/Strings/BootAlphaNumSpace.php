<?php

namespace Moharrum\LaravelRules\Booters\Strings;

use Moharrum\LaravelRules\Validators\Strings;

/**
 * @author Khalid Moharrum <khalid.moharram@gmail.com>
 */
trait BootAlphaNumSpace
{
    /**
     * @var string
     */
    private string $ruleName = "alpha_num_space";

    /**
     * Register alpha num space validator.
     *
     * @return void
     */
    public function bootAlphaNumSpace(): void
    {
        $this->app->validator->extend(
            $this->ruleName,
            Strings::class . '@alphaNumSpace'
        );

        $this->app->validator->replacer(
            $this->ruleName,
            function ($message, $attribute, $rule, $parameters) {
                return str_replace(
                    ':attribute',
                    $attribute,
                    trans('laravel-rules::validation.' . $this->ruleName)
                );
            }
        );
    }
}
