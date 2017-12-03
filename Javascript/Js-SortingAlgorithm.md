```html
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Js排序算法</title>
</head>

<body>

</body>
<script type="text/javascript">
  /**快速排序
  快速排序由于排序效率在同为O(N*logN)的几种排序方法中效率较高，
  因此经常被采用，再加上快速排序思想----分治法也确实实用。快速排序是一种既不浪费空间又可以快一点的排序算法。

  算法步骤:
  先从数列中取出一个数作为“基准”。
  分区过程：将比这个“基准”大的数全放到“基准”的右边，小于或等于“基准”的数全放到“基准”的左边。
  再对左右区间重复第二步，直到各区间只有一个数。
  */
  var quickSort = function (arr) {
    if (arr.length <= 1) { return arr; }
    var pivotIndex = Math.floor(arr.length / 2);   //基准位置（理论上可任意选取）
    var pivot = arr.splice(pivotIndex, 1)[0];  //基准数
    var left = [];
    var right = [];
    for (var i = 0; i < arr.length; i++) {
      if (arr[i] < pivot) {
        left.push(arr[i]);
      } else {
        right.push(arr[i]);
      }
    }
    return quickSort(left).concat([pivot], quickSort(right));  //链接左数组、基准数构成的数组、右数组
  };
  console.log('快速排序', quickSort([1, 3, 6, 9, 8, 7, 2, 4,]))

  /**选择排序
  选择排序是一种简单直观的排序算法，无论什么数据进去都是O(n2) 的时间复杂度。所以用到它的时候，数据规模越小越好。唯一的好处可能就是不占用额外的内存空间了吧。
  通俗来说就是你们中间谁最小谁就出列，站到队列的最后边，然后继续对着剩余的无序数组说你们中间谁最小谁就出列，站到队列的最后边，
  一直到最后一个，继续站到最后边，这样数组就有了顺序，从小到大。

  算法步骤:
  在未排序序列中找到最小（大）元素，存放到排序序列的起始位置
  从剩余未排序元素中继续寻找最小（大）元素，然后放到已排序序列的末尾。
  重复第二步，直到所有元素均排序完毕。
  */
  function SelectionSortTest(arr) {
    let minIndex, tmp;
    for (let i = 0; i < arr.length - 1; i++) {
      minIndex = i;
      for (let j = i + 1; j < arr.length; j++) {  //选择排序 每个j把数组遍历一遍来判断大小
        if (arr[j] < arr[minIndex]) {
          minIndex = j;
        }
      }
      tmp = arr[i];
      arr[i] = arr[minIndex];
      arr[minIndex] = tmp;
    }
    return arr;
  }
  console.log('选择排序', SelectionSortTest([1, 3, 6, 9, 8, 7, 2, 4]))


  /**希尔排序
  希尔排序，也称递减增量排序算法，是插入排序的一种更高效的改进版本。但希尔排序是非稳定排序算法。希尔排序是基于插入排序的以下两点性质而提出改进方法的：
    插入排序在对几乎已经排好序的数据操作时，效率高，即可以达到线性排序的效率；
    但插入排序一般来说是低效的，因为插入排序每次只能将数据移动一位；
  希尔排序的基本思想是：先将整个待排序的记录序列分割成为若干子序列分别进行直接插入排序，待整个序列中的记录基本有序时，再对全体记录进行依次直接插入排序。

  算法步骤:
  选择一个增量序列 t1，t2，……，tk，其中 ti > tj, tk = 1；
  按增量序列个数 k，对序列进行 k 趟排序；
  每趟排序，根据对应的增量 ti，将待排序列分割成若干长度为 m 的子序列，分别对各子表进行直接插入排序。
  仅增量因子为 1 时，整个序列作为一个表来处理，表长度即为整个序列的长度。
  */
  function shellSort(arr) {
    var len = arr.length,
      temp,
      gap = 1;
    while (gap < len / 3) {          //动态定义间隔序列
      gap = gap * 3 + 1;
    }
    for (gap; gap > 0; gap = Math.floor(gap / 3)) {
      for (var i = gap; i < len; i++) {
        temp = arr[i];
        for (var j = i - gap; j >= 0 && arr[j] > temp; j -= gap) {
          arr[j + gap] = arr[j];
        }
        arr[j + gap] = temp;
      }
    }
    return arr;
  }
  console.log('希尔排序', shellSort([1, 3, 6, 9, 8, 7, 2, 4]))

  let arr1 = [49, 38, 65, 97, 76, 13, 27, 49, 55, 04], len = arr1.length;
  for (let fraction = Math.floor(len / 2); fraction > 0; fraction = Math.floor(fraction / 2)) {
    console.log('希尔排序2-1', Math.floor(len / 2), Math.floor(fraction / 2), fraction)
    for (let i = fraction; i < len; i++) {
      console.log('希尔排序2-2', i, fraction)
      for (let j = i - fraction; j >= 0 && arr1[j] > arr1[fraction + j]; j -= fraction) {
        console.log('希尔排序2-3', j, fraction, arr1[j], arr1[fraction + j])
        let temp = arr1[j];
        arr1[j] = arr1[fraction + j];
        arr1[fraction + j] = temp;
      }
    }
  }
  console.log(arr1);

</script>

</html>
```