<?php

namespace Tests\Unit\Strings;

use Tests\TestCase;

/**
 * Handle specific rule test behavior & logic.
 *
 * @author Khalid Moharrum <khalid.moharram@gmail.com>
 */
class AlphaNumSpaceTest extends TestCase
{
    /**
     * A simple test to make sure that the rule works.
     *
     * There is no need to add complex testing logic since
     * the regex behind this is straight forward.
     *
     * @return void
     */
    public function testItWorksTest(): void
    {
        $rules = [
            'field' => 'alpha_num_space',
        ];

        $data = [
            'field' => 'abcd ابتث 1234',
        ];

        $validator = app('validator')->make($data, $rules);

        $this->assertTrue($validator->passes());
    }
}
