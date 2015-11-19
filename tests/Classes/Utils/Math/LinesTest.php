<?php
namespace Classes\Utils\Math;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-11-15 at 03:07:11.
 */
class LinesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Lines
     */
    protected $object;

    /**
     * @covers Classes\Utils\Math\Lines::isTwoPiecesOnSameLine
     */
    public function testIsTwoPiecesOnSameLine_1()
    {
        $p1 = new \Classes\Utils\AbstractInstance\Point(1,2,3);
        $p2 = new \Classes\Utils\AbstractInstance\Point(2,4,6);
        $p3 = new \Classes\Utils\AbstractInstance\Point(1.5,3.0,4.5);
        $p4 = new \Classes\Utils\AbstractInstance\Point(3.0,6.0,9.0);
        
        $line1 = new \Classes\Utils\AbstractInstance\Line($p1, $p2);
        $line2 = new \Classes\Utils\AbstractInstance\Line($p3, $p4);
        
        $this->assertEquals(Lines::isTwoPiecesOnSameLine($line1, $line2), TRUE);
    }
    
    /**
     * @covers Classes\Utils\Math\Lines::isTwoPiecesOnSameLine
     */
    public function testIsTwoPiecesOnSameLine_2()
    {
        $p1 = new \Classes\Utils\AbstractInstance\Point(3,3,6);
        $p2 = new \Classes\Utils\AbstractInstance\Point(3,5,6);
        $p3 = new \Classes\Utils\AbstractInstance\Point(3,10,6);
        $p4 = new \Classes\Utils\AbstractInstance\Point(3,15,6);
        
        $line1 = new \Classes\Utils\AbstractInstance\Line($p1, $p2);
        $line2 = new \Classes\Utils\AbstractInstance\Line($p3, $p4);
        
        $this->assertEquals(Lines::isTwoPiecesOnSameLine($line1, $line2), TRUE);
    }
    
    /**
     * @covers Classes\Utils\Math\Lines::isTwoPiecesOnSameLine
     */
    public function testIsTwoPiecesOnSameLine_3()
    {
        $p1 = new \Classes\Utils\AbstractInstance\Point(1,2,3);
        $p2 = new \Classes\Utils\AbstractInstance\Point(2,4,6);
        $p3 = new \Classes\Utils\AbstractInstance\Point(1.5,3.0,4.5);
        $p4 = new \Classes\Utils\AbstractInstance\Point(3.0,6.0,10.0);
        
        $line1 = new \Classes\Utils\AbstractInstance\Line($p1, $p2);
        $line2 = new \Classes\Utils\AbstractInstance\Line($p3, $p4);
        
        $this->assertEquals(Lines::isTwoPiecesOnSameLine($line1, $line2), FALSE);
    }
    
    /**
     * @covers Classes\Utils\Math\Lines::areTwoVectorHaveSameDirection
     */
    public function testAreTwoVectorHaveSameDirection_1()
    {
        $p1 = new \Classes\Utils\AbstractInstance\Point(1,1,1);
        $p2 = new \Classes\Utils\AbstractInstance\Point(2,2,2);
        $p3 = new \Classes\Utils\AbstractInstance\Point(3,3,3);
        $p4 = new \Classes\Utils\AbstractInstance\Point(4,4,4);
        
        $line1 = new \Classes\Utils\AbstractInstance\Line($p1, $p2);
        $line2 = new \Classes\Utils\AbstractInstance\Line($p3, $p4);
        
        $this->assertEquals(Lines::areTwoVectorHaveSameDirection($line1, $line2), TRUE);
        
        $line3 = new \Classes\Utils\AbstractInstance\Line($p4, $p3);
        
        $this->assertEquals(Lines::areTwoVectorHaveSameDirection($line1, $line3), FALSE);
    }
    
    /**
     * @covers Classes\Utils\Math\Lines::areTwoVectorHaveSameDirection
     */
    public function testAreTwoVectorHaveSameDirection_2()
    {
        $p1 = new \Classes\Utils\AbstractInstance\Point(1,2,3);
        $p2 = new \Classes\Utils\AbstractInstance\Point(1,2,4);
        $p3 = new \Classes\Utils\AbstractInstance\Point(1,2,5);
        $p4 = new \Classes\Utils\AbstractInstance\Point(1,2,6);
        
        $line1 = new \Classes\Utils\AbstractInstance\Line($p1, $p2);
        $line2 = new \Classes\Utils\AbstractInstance\Line($p3, $p4);
        
        $this->assertEquals(Lines::areTwoVectorHaveSameDirection($line1, $line2), TRUE);
        
        $line3 = new \Classes\Utils\AbstractInstance\Line($p4, $p3);
        
        $this->assertEquals(Lines::areTwoVectorHaveSameDirection($line1, $line3), FALSE);
    }
    
    /**
     * @covers Classes\Utils\Math\Lines::findOverlappingOfTwoLines
     */
    public function testFindOverlappingOfTwoLines_1()
    {
        $p1 = new \Classes\Utils\AbstractInstance\Point(0,0,0);
        $p2 = new \Classes\Utils\AbstractInstance\Point(5,0,0);
        $p3 = new \Classes\Utils\AbstractInstance\Point(1,0,0);
        $p4 = new \Classes\Utils\AbstractInstance\Point(0,1,0);
        
        $line1 = new \Classes\Utils\AbstractInstance\Line($p1, $p2);
        $line2 = new \Classes\Utils\AbstractInstance\Line($p3, $p4);
        
        $overlap1 = array(); $overlap2 = array();
        $this->assertEquals(Lines::findOverlappingOfTwoLines($line1, $line2, $overlap1, $overlap2), FALSE);
    }
    
    /**
     * @covers Classes\Utils\Math\Lines::findOverlappingOfTwoLines
     */
    public function testFindOverlappingOfTwoLines_2()
    {
        $p1 = new \Classes\Utils\AbstractInstance\Point(0,0,0);
        $p2 = new \Classes\Utils\AbstractInstance\Point(5,0,0);
        $p3 = new \Classes\Utils\AbstractInstance\Point(3,0,0);
        $p4 = new \Classes\Utils\AbstractInstance\Point(10,0,0);
        
        $line1 = new \Classes\Utils\AbstractInstance\Line($p1, $p2);
        $line2 = new \Classes\Utils\AbstractInstance\Line($p3, $p4);
        
        $overlap1 = array(); $overlap2 = array();
        $this->assertEquals(Lines::findOverlappingOfTwoLines($line1, $line2, $overlap1, $overlap2), TRUE);
        
        $this->assertEquals(Constant::isNumbersEqual($overlap1[0], 3), TRUE);
        $this->assertEquals(Constant::isNumbersEqual($overlap1[1], 5), TRUE);
        
        $this->assertEquals(Constant::isNumbersEqual($overlap2[0], 0), TRUE);
        $this->assertEquals(Constant::isNumbersEqual($overlap2[1], 2), TRUE);
    }
    
    /**
     * @covers Classes\Utils\Math\Lines::findOverlappingOfTwoLines
     */
    public function testFindOverlappingOfTwoLines_3()
    {
        $p1 = new \Classes\Utils\AbstractInstance\Point(0,0,0);
        $p2 = new \Classes\Utils\AbstractInstance\Point(5,0,0);
        $p3 = new \Classes\Utils\AbstractInstance\Point(10,0,0);
        $p4 = new \Classes\Utils\AbstractInstance\Point(3,0,0);
        
        $line1 = new \Classes\Utils\AbstractInstance\Line($p1, $p2);
        $line2 = new \Classes\Utils\AbstractInstance\Line($p3, $p4);
        
        $overlap1 = array(); $overlap2 = array();
        $this->assertEquals(Lines::findOverlappingOfTwoLines($line1, $line2, $overlap1, $overlap2), TRUE);
        
        $this->assertEquals(Constant::isNumbersEqual($overlap1[0], 3), TRUE);
        $this->assertEquals(Constant::isNumbersEqual($overlap1[1], 5), TRUE);
        
        $this->assertEquals(Constant::isNumbersEqual($overlap2[0], 5), TRUE);
        $this->assertEquals(Constant::isNumbersEqual($overlap2[1], 7), TRUE);
    }
    
    /**
     * @covers Classes\Utils\Math\Lines::findOverlappingOfTwoLines
     */
    public function testFindOverlappingOfTwoLines_4()
    {
        $p1 = new \Classes\Utils\AbstractInstance\Point(0,0,0);
        $p2 = new \Classes\Utils\AbstractInstance\Point(5,5,5);
        $p3 = new \Classes\Utils\AbstractInstance\Point(3,3,3);
        $p4 = new \Classes\Utils\AbstractInstance\Point(10,10,10);
        
        $line1 = new \Classes\Utils\AbstractInstance\Line($p1, $p2);
        $line2 = new \Classes\Utils\AbstractInstance\Line($p3, $p4);
        
        $overlap1 = array(); $overlap2 = array();
        $this->assertEquals(Lines::findOverlappingOfTwoLines($line1, $line2, $overlap1, $overlap2), TRUE);
        
        $this->assertEquals(Constant::isNumbersEqual($overlap1[0], 3*sqrt(3)), TRUE);
        $this->assertEquals(Constant::isNumbersEqual($overlap1[1], 5*sqrt(3)), TRUE);
        
        $this->assertEquals(Constant::isNumbersEqual($overlap2[0], 0), TRUE);
        $this->assertEquals(Constant::isNumbersEqual($overlap2[1], 2*sqrt(3)), TRUE);
    }
    
    /**
     * @covers Classes\Utils\Math\Lines::findOverlappingOfTwoLines
     */
    public function testFindOverlappingOfTwoLines_5()
    {
        $p1 = new \Classes\Utils\AbstractInstance\Point(0,0,0);
        $p2 = new \Classes\Utils\AbstractInstance\Point(5,5,5);
        $p3 = new \Classes\Utils\AbstractInstance\Point(10,10,10);
        $p4 = new \Classes\Utils\AbstractInstance\Point(3,3,3);
        
        $line1 = new \Classes\Utils\AbstractInstance\Line($p1, $p2);
        $line2 = new \Classes\Utils\AbstractInstance\Line($p3, $p4);
        
        $overlap1 = array(); $overlap2 = array();
        $this->assertEquals(Lines::findOverlappingOfTwoLines($line1, $line2, $overlap1, $overlap2), TRUE);
        
        $this->assertEquals(Constant::isNumbersEqual($overlap1[0], 3*sqrt(3)), TRUE);
        $this->assertEquals(Constant::isNumbersEqual($overlap1[1], 5*sqrt(3)), TRUE);
        
        $this->assertEquals(Constant::isNumbersEqual($overlap2[0], 5*sqrt(3)), TRUE);
        $this->assertEquals(Constant::isNumbersEqual($overlap2[1], 7*sqrt(3)), TRUE);
    }
    
    /**
     * @covers Classes\Utils\Math\Lines::findOverlappingOfTwoLines
     */
    public function testFindOverlappingOfTwoLines_6()
    {
        $p1 = new \Classes\Utils\AbstractInstance\Point(3,3,3);
        $p2 = new \Classes\Utils\AbstractInstance\Point(10,10,10);
        $p3 = new \Classes\Utils\AbstractInstance\Point(0,0,0);
        $p4 = new \Classes\Utils\AbstractInstance\Point(5,5,5);
        
        $line1 = new \Classes\Utils\AbstractInstance\Line($p1, $p2);
        $line2 = new \Classes\Utils\AbstractInstance\Line($p3, $p4);
        
        $overlap1 = array(); $overlap2 = array();
        $this->assertEquals(Lines::findOverlappingOfTwoLines($line1, $line2, $overlap1, $overlap2), TRUE);
        
        $this->assertEquals(Constant::isNumbersEqual($overlap1[0], 0), TRUE);
        $this->assertEquals(Constant::isNumbersEqual($overlap1[1], 2*sqrt(3)), TRUE);
        
        $this->assertEquals(Constant::isNumbersEqual($overlap2[0], 3*sqrt(3)), TRUE);
        $this->assertEquals(Constant::isNumbersEqual($overlap2[1], 5*sqrt(3)), TRUE);
    }
    
    /**
     * @covers Classes\Utils\Math\Lines::findOverlappingOfTwoLines
     */
    public function testFindOverlappingOfTwoLines_7()
    {
        $p1 = new \Classes\Utils\AbstractInstance\Point(0,0,0);
        $p2 = new \Classes\Utils\AbstractInstance\Point(10,10,10);
        $p3 = new \Classes\Utils\AbstractInstance\Point(3,3,3);
        $p4 = new \Classes\Utils\AbstractInstance\Point(5,5,5);
        
        $line1 = new \Classes\Utils\AbstractInstance\Line($p1, $p2);
        $line2 = new \Classes\Utils\AbstractInstance\Line($p3, $p4);
        
        $overlap1 = array(); $overlap2 = array();
        $this->assertEquals(Lines::findOverlappingOfTwoLines($line1, $line2, $overlap1, $overlap2), TRUE);
        
        $this->assertEquals(Constant::isNumbersEqual($overlap1[0], 3*sqrt(3)), TRUE);
        $this->assertEquals(Constant::isNumbersEqual($overlap1[1], 5*sqrt(3)), TRUE);
        
        $this->assertEquals(Constant::isNumbersEqual($overlap2[0], 0), TRUE);
        $this->assertEquals(Constant::isNumbersEqual($overlap2[1], 2*sqrt(3)), TRUE);
    }
    
    /**
     * @covers Classes\Utils\Math\Lines::findOverlappingOfTwoLines
     */
    public function testFindOverlappingOfTwoLines_8()
    {
        $p1 = new \Classes\Utils\AbstractInstance\Point(3,3,3);
        $p2 = new \Classes\Utils\AbstractInstance\Point(5,5,5);
        $p3 = new \Classes\Utils\AbstractInstance\Point(0,0,0);
        $p4 = new \Classes\Utils\AbstractInstance\Point(10,10,10);
        
        $line1 = new \Classes\Utils\AbstractInstance\Line($p1, $p2);
        $line2 = new \Classes\Utils\AbstractInstance\Line($p3, $p4);
        
        $overlap1 = array(); $overlap2 = array();
        $this->assertEquals(Lines::findOverlappingOfTwoLines($line1, $line2, $overlap1, $overlap2), TRUE);
        
        $this->assertEquals(Constant::isNumbersEqual($overlap1[0], 0), TRUE);
        $this->assertEquals(Constant::isNumbersEqual($overlap1[1], 2*sqrt(3)), TRUE);
        
        $this->assertEquals(Constant::isNumbersEqual($overlap2[0], 3*sqrt(3)), TRUE);
        $this->assertEquals(Constant::isNumbersEqual($overlap2[1], 5*sqrt(3)), TRUE);
    }
    
    /**
     * @covers Classes\Utils\Math\Lines::findOverlappingOfTwoLines
     */
    public function testFindOverlappingOfTwoLines_9()
    {
        $p1 = new \Classes\Utils\AbstractInstance\Point(3,3,3);
        $p2 = new \Classes\Utils\AbstractInstance\Point(5,5,5);
        $p3 = new \Classes\Utils\AbstractInstance\Point(10,10,10);
        $p4 = new \Classes\Utils\AbstractInstance\Point(0,0,0);
        
        $line1 = new \Classes\Utils\AbstractInstance\Line($p1, $p2);
        $line2 = new \Classes\Utils\AbstractInstance\Line($p3, $p4);
        
        $overlap1 = array(); $overlap2 = array();
        $this->assertEquals(Lines::findOverlappingOfTwoLines($line1, $line2, $overlap1, $overlap2), TRUE);
        
        $this->assertEquals(Constant::isNumbersEqual($overlap1[0], 0), TRUE);
        $this->assertEquals(Constant::isNumbersEqual($overlap1[1], 2*sqrt(3)), TRUE);
        
        $this->assertEquals(Constant::isNumbersEqual($overlap2[0], 5*sqrt(3)), TRUE);
        $this->assertEquals(Constant::isNumbersEqual($overlap2[1], 7*sqrt(3)), TRUE);
    }
}