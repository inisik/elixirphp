<?php
declare(strict_types=1);
/**
 * ElixirPHP.
 *
 * Be able to securely code high level web applications using PHP.
 *
 * @author ElixirPHP Contributors <https://github.com/inisik/elixirphp/graphs/contributors>
 *
 * @license <https://github.com/inisik/elixirphp/blob/master/LICENSE>.
 * @link    <https://github.com/inisik/elixirphp>.
 */

use PHPUnit\Framework\
{
    TestListener,
    TestCase
};

/**
 * @class      ElixirTestListener.
 * @implements TestListener.
 */
class      ElixirTestListener
implements TestListener
{

    /**
     * @function addError.
     * @param PHPUnit\Framework\Test $test.
     * @param Exception              $e.
     * @param mixed                  $time.
     * @return void.
     */
    public function addError(
        PHPUnit\Framework\Test $test,
        Exception              $e,
                               $time
    )
    {
        printf(
            "Error: Error Running Test\n"
        );
    }

    /**
     * @function addFailure.
     * @param PHPUnit\Framework\Test                 $test.
     * @param PHPUnit\Framework\AssertionFailedError $e.
     * @param mixed                                  $time.
     * @return void.
     */
    public function addFailure(
        PHPUnit\Framework\Test                 $test,
        PHPUnit\Framework\AssertionFailedError $e,
                                               $time
    )
    {
        printf(
            "Failure: Test Could Not Properly Verify Functionality\n"
        );
    }

    /**
     * @function addIncompleteTest.
     * @param PHPUnit\Framework\Test $test.
     * @param Exception              $e.
     * @param mixed                  $time.
     * @return void.
     */
    public function addIncompleteTest(
        PHPUnit\Framework\Test $test,
        Exception              $e,
                               $time
    )
    {
        printf(
            "Incomplete: Test Is Not Properly Coded\n"
        );
    }

    /**
     * @function addRiskyTest.
     * @param PHPUnit\Framework\Test $test.
     * @param Exception              $e.
     * @param mixed                  $time.
     * @return void.
     */
    public function addRiskyTest(
        PHPUnit\Framework\Test $test,
        Exception              $e,
                               $time
    )
    {
        printf(
            "Risky: Test Is Risky And Should Be Recoded\n"
        );
    }

    /**
     * @function addSkippedTest.
     * @param PHPUnit\Framework\Test $test.
     * @param Exception              $e.
     * @param mixed                  $time.
     * @return void.
     */
    public function addSkippedTest(
        PHPUnit\Framework\Test $test,
        Exception              $e,
                               $time
    )
    {
        printf(
            "Skipped: Test Is Skipped By The Repository\n"
        );
    }

    /**
     * @function startTest.
     * @param PHPUnit\Framework\Test $test.
     * @return void.
     */
    public function startTest(
        PHPUnit\Framework\Test $test
    )
    {
        printf(
            "------------------\n" .
            "Test:   %s\n" .
            "Status: Running...\n" . 
            "------------------\n",
            $test->getName()
        );
    }

    /**
     * @function endTest.
     * @param PHPUnit\Framework\Test $test.
     * @param mixed                  $time.
     * @return void.
     */
    public function endTest(
        PHPUnit\Framework\Test $test,
                               $time
    )
    {
        printf(
            "------------------\n" .
            "Test:   %s\n" .
            "Status: Ended\n" . 
            "------------------\n",
            $test->getName()
        );
    }

    /**
     * @function startTestSuite.
     * @param PHPUnit\Framework\TestSuite $suite.
     * @return void.
     */
    public function startTestSuite(
        PHPUnit\Framework\TestSuite $suite
    )
    {
        printf(
            "------------------\n" .
            "TestSuite: %s\n" .
            "Status:    Running...\n" . 
            "------------------\n",
            $suite->getName()
        );
    }

    /**
     * @function endTestSuite.
     * @param PHPUnit\Framework\TestSuite $suite.
     * @return void.
     */
    public function endTestSuite(
        PHPUnit\Framework\TestSuite $suite
    )
    {
        printf(
            "------------------\n" .
            "TestSuite: %s\n" .
            "Status:    Ended\n" . 
            "------------------\n",
            $suite->getName()
        );
    }
}
