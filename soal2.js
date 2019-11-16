function hitungKembalian(harga,uang){
    listKembalian = [500, 1000, 2000, 5000, 10000, 20000,50000];

    sortedListKembalian = listKembalian.reverse();
    listKembalian = [];

    let sisa = uang-harga;
    console.log(sisa)
    while (sisa > 0) {
        for(i=0;i<sortedListKembalian.length;i++){
            let e = sortedListKembalian[i];
            if(sisa>=e){
                listKembalian.push(e);
                sisa = sisa-e;
            break;
            }
        };
    }

    let currentDuit = null;
    let countDuit =0;
    listKembalian.forEach(e => {
        if(e!==currentDuit){      
            if(countDuit>0){
                console.log(countDuit + "X"+ currentDuit);
            }      
            currentDuit = e;
            countDuit=1;
        } else {
            countDuit++;
        }
    });
    if (countDuit > 0) {
        console.log(countDuit + "X"+ currentDuit);
    }
    return listKembalian;
}
console.log(hitungKembalian(150000,240000));
