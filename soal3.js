function cetakGambar(angka){
    if(Number(angka) % 2!=0){
        var gambar ="";
        var isGanjil = false; 
        for(i = 0;i<angka; i++){
            if(Number(i) % 2!=0){
                isGanjil=true;
            } else {
                isGanjil=false;
            }
        
            for(z=0;z<angka;z++){
                if(isGanjil==true && z% 2!=0){
                    gambar= gambar+" = ";
                } else if(isGanjil==true && z% 2==0){
                    gambar= gambar+" * ";
                } else if(isGanjil==false && z% 2!=0) {
                    gambar= gambar+" * ";
                } 
                // else if(z==cariMedian(angka)){
                //     gambar= gambar+" = ";
                // }
                else{
                    gambar= gambar+" = ";
                }
            }
            gambar= gambar+ '\n';
        }
       
    } else {
        return "angka harus ganjil";
    }
  return gambar;
}

function cariMedian(angka){
    arr = [];
    for(i =0;i<angka;i++){
        arr.push(i)
    }
    let median = (angka-1) /2 + angka %2;
    return median ;
}

console.log(cetakGambar(5));