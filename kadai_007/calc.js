// 変数の宣言変数の宣言(0~100)
let num = Math.floor(Math.random() * 101);

// 変数numの値を出力する（確認用）
console.log(num);

// 変数が3の倍数、5の倍数両方に当てはまる場合
if ((num % 3 === 0) && (num % 5 === 0)){
  console.log("3と5の倍数です");
}
// 3の倍数の場合「3の倍数です」という文字列を出力する
else if (num % 3 === 0) {
  console.log('3の倍数です');
}
 // 5の倍数の場合「5の倍数です」という文字列を出力する
 else if (num % 5 === 0) {
   console.log('5の倍数です');
}
 
// それ以外のときは、「変数num」を出力する
else {
  console.log('numはそれ以外の変数です');
}