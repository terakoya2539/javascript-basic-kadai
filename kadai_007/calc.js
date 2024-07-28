let num = 29;


if (num % 3 === 0 && num % 5 === 0) {
    console.log('3と5の倍数です');
}

else if (num % 3 == 0) {
    console.log('3の倍数です');
}

else if (num % 5 == 0) {
    console.log('5の倍数です');
}

// それ以外の場合
else {
    console.log (num);
}