<?php

namespace App\Http\Controllers;

use AssertionError;
use Illuminate\Http\Request;
use function App\Http\Tools\abc;

define('ANIMALS', [
    'dog',
    'cat',
    'bird'
]);
interface abc{
    public function log(string $log);
}

class A {private $x = 1;
    public function get(){
        echo $this->x;
    }
}
class CustomError extends AssertionError {

}

class IndexController extends Controller
{
    //



    public function index()
    {
//        $this->alog();
        // ===end====
        $this->php7();
        $aData['iframe'] = Route("news.index");
        return view('hplus.index', $aData);
    }

    public function php7(){
        // 标量类型声明 涉及到强制模式和严格模式的区别  规范
//        $this->someDeclare(2,'23',5');
        // 返回值类型声明 涉及到强制模式和严格模式的区别 规范
//        dd($this->arraysSum([12,3],[23,5]));
        // NULL 合并运算符 操作方便
//        $this->nullOperate();l
        // 太空船操作符（组合比较符） 操作方便
//        $this->spaceShipOperate();
        // define 常量也可以定义数组了。
//        dd(ANIMALS[1]);  功能增强
        // 随时增加一个匿名类使用。  功能增强
//        $this->anoyClass(new class implements abc {
//            public function log(string $a){
//                echo $a;
//            }
//        });
        // 绑定方法到对象上 操作方便
//        $this->bindToObject();
        // 为unserialize()提供过滤  安全方面。
//        $this->unserializeSafe();
        // 预期 ，断言
        assert(false, new CustomError('Some error message'));
        // use 加强 批量导入功能
        // yield 增强
        //新增了整除函数 intdiv(),使用实例：
        var_dump(intdiv(10, 3));

    }

    /**
     * 这个特性旨在提供更安全的方式解包不可靠的数据。它通过白名单的方式来防止潜在的代码注入。
     */
    public function unserializeSafe(){
       $a = serialize(new A);
//       dd(unserialize($a,['allowed_classes' => true]));
       $tmp = unserialize($a,['allowed_classes' => ["App\Http\Controllers\A"]]);
       $tmp->get();

    }

    public function bindToObject(){
        $getX = function() {return $this->x;};
        echo $getX->call(new A);
    }
    /**
     * 构建匿名类,
     * 现在支持通过new class 来实例化一个匿名类，实例如下：
     */
    public function anoyClass(abc $abc){
        var_dump($abc);
        dd(23);
    }
    /**
     * 太空船操作符用于比较两个表达式。当$a大于、等于或小于$b时它分别返回-1、0或1。
     */
    public function spaceShipOperate(){

        dd(1 <=> '1');
    }
    /*
     * 由于日常使用中存在大量同时使用三元表达式和 isset()的情况，
     * NULL 合并运算符使得变量存在且值不为NULL，
     * 它就会返回自身的值，否则返回它的第二个操作数。
     */
    public function nullOperate(){
        $b = NULL;
        $a = $b ?? 2;
        dd($a);
    }
    /**
     * @desc 标量类型声明
     * 需要注意的是上文提到的严格模式的问题在这里同样适用：
     * 强制模式（默认，既强制类型转换）下还是会对不符合预期的参数进行强制类型转换，
     * 严格模式下则触发 TypeError 的致命错误。
     */
    public function someDeclare(int ...$ints){
        dd($ints);
    }

    /**
     * @desc 返回值类型声明
     */
    function arraysSum(array ...$arrays): array
    {
        return array_map(function(array $array):int{
            return array_sum($array);
        }, $arrays);
    }

    public function alog(){
        $a = array(1,3,5);
        $b = array(2,4,6);
        // + 操作数组时数字型和关联索引一样。都是遇到相同的就抛弃后面的。
        // array_merge行为多变。关联索引下，遇到相同采用后者，数字索引下包括 2=>val,'2'=>val
        // 都是选择直接插入。同时重新排序数字索引，无论中间是否有其他关联索引插入。都是自然数升序的。
        dd(array_merge($a,$b));
        //
        $arr=array(1,43,54,62,21,66,32,78,36,76,39);
        sort($arr);
//        dd($this->quickSort($arr));
//        dd($this->niu(22),$this->niunum(22));
//        dd($this->binSearch($arr,62));
//        $email = '中国人hello呀';
//        $domain = strstr($email, '国人');
//        dd($domain);
//        dd($this->binSearchRecursive($arr,0,count($arr)-1,39));
          dd(5 + $this->bearDrink(5,5));
    }

    public function bearDrink($iLeftBottle,$iLeftTop){
            if($iLeftBottle >=2 || $iLeftTop >=4){
                $iLeftTopTotal = intval($iLeftTop/4) + ($iLeftTop % 4) + intval($iLeftBottle/2);
                $iLeftBottleTotal = intval($iLeftBottle/2) + ($iLeftBottle % 2) + intval($iLeftTop /4);
//                print($iLeftBottleTotal);
//                echo "<br/>";
//                print($iLeftTopTotal);
//                echo "<br/>";
                return  intval($iLeftTop/4) + intval($iLeftBottle/2) + $this->bearDrink($iLeftBottleTotal,$iLeftTopTotal);
            }
            return 0;
    }
    // 二分法的对运用
    // 关键还是要排序数组，判断条件为下标区间。比较条件为中间值。不满足则一直递归查找。

    public function binSearchRecursive($arr,$iMin,$iMax,$iNum){
        if($iMin <= $iMax){
            $iMiddle = floor(($iMin + $iMax)/2);// 取中间数
            if($arr[$iMiddle] == $iNum){
                return true;
            }
            if($arr[$iMiddle] > $iNum){
                return $this->binSearchRecursive($arr,$iMin,$iMiddle - 1,$iNum);
            }
            if($arr[$iMiddle] < $iNum){
                return $this->binSearchRecursive($arr,$iMiddle + 1,$iMax,$iNum);
            }

        }else{
            return false;
        }
    }

    /**
     * @param $arr
     * 关键在数组本身是有序性的，然后始终取中间的数进行比较，是否相等，则结束查询
     * 如果不相等，则判断方向，决定下一个不包含中间值的查询区间。这仍然有递归的味道。或者while循环
     * 其实要查找可以转换为字符串，然后用substr_count来获取
     */
    public function binSearch($arr,$iNum){
        if(count($arr)== 0){
            return false;
        }
        $iMax = count($arr) -1; //索引下标
        $iMin = 0; // 索引下标
        while($iMin <= $iMax){
            $iMiddle = floor(($iMin + $iMax)/2);
            if($arr[$iMiddle] == $iNum){
                return true;
            }
            if($arr[$iMiddle] > $iNum){
                $iMax = $iMiddle - 1;
            }
            if($arr[$iMiddle] < $iNum){
                $iMin = $iMiddle + 1;
            }
        }
        return false;
    }

//
//简单来说就是：找到当前数组中的任意一个元素（一般选择第一个元素），作为标的，新建两个空数组，遍历整个数组元素，
//如果遍历到的元素比当前的元素要小，那么就放到左边的数组，否则放到右面的数组，然后再对新数组进行同样的操作。
    public function quickSort($arr){
        $iCount = count($arr);
        if($iCount <= 1){
            return $arr;
        }
        $iMiddle  = $arr[0];// 选取标的
        $aLeftArr  = []; // 建立两个空桶
        $aRightArr = [];// 建立两个空桶
        // 开始分门别类
        for ($i=1 ;$i< $iCount; $i++){
            if($arr[$i] > $iMiddle){
                $aRightArr[] = $arr[$i];
            }else{
                $aLeftArr[] = $arr[$i];
            }
        }
        $aLeftArr  = $this->quickSort($aLeftArr);
        $aRightArr = $this->quickSort($aRightArr);

        return array_merge($aLeftArr,array($iMiddle),$aRightArr);

    }

    public function bubbleSort($arr){
        $iCount = count($arr);
        if($iCount<=1){
            return $arr;
        }
        for ($i=1;$i<$iCount;$i++){
            for ($k = 0; $k<$iCount - $i; $k++){
                if($arr[$k] > $arr[$k+1]){
                    $tmp = $arr[$k+1];
                    $arr[$k+1] = $arr[$k];
                    $arr[$k] = $tmp;
                }
            }
        }
        return $arr;

    }

    public function niu($n){
        if($n<4){
            return 1;
        }
        $iTotal = 1;
        if($n >= 20){
            $iTotal --;
        }
        for($i=1;$i<=$n;$i++){
            if($i>=4 && $i < 15){
                $iTotal += $this->niu($n - $i);
            }
        }
        return $iTotal;
    }
    public function niunum($n) {
        static $num = 1;
        for ($i = 1; $i <= $n; $i++) {
            if ($i >= 4 && $i < 15) {
                $num++;
                $this->niunum($n - $i);
            }
            if ($i == 20) $num--;
        }
        return $num;
    }

}
