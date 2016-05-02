<?php
/**
 * AssertTrue/AssertFalse Kiểm tra đầu vào để xác minh nó là true hay false;
 * AssertEquals Kiểm tra kết quả dựa theo các đầu vào khác;
 * AssertGreaterThan Kiểm tra kết quả để xem nó có lớn hơn một giá trị hay không (có cả LessThan, GreaterThanOrEqual, và LessThanOrEqual);
 * AssertContains Kiểm tra xem đầu vào có chứa một giá trị nào đó;
 * AssertType Kiểm tra xem biến là kiểu nào;
 * AssertNull Kiểm tra xem một biến là null;
 * AssertFileExists Xác minh sự tồn tại của một file;
 * AssertRegExp Kiểm tra đầu vào dựa theo một biểu thức chính quy
 * https://laravel.com/docs/5.2/testing
 *
 * https://phpunit.de/manual/current/en/appendixes.assertions.html
 * Mocking Traits and Abstract Classes
 */



require_once('RemoteConnect.php');

class RemoteConnectTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }

    public function tearDown()
    {
    }

    public function testConnectionIsValid()
    {
        // test to ensure that the object from an fsockopen is valid
        $connObj = new RemoteConnect();
        $serverName = 'www.google.com';
        $this->assertTrue($connObj->connectToServer($serverName) !== false);
    }
}