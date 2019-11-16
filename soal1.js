
function filter(nomor){
    let tempArray = [];
    let finalArray =[];
    if(nomor.length!==0){
        for(i = 0; i <nomor.length; i++){
            let tempArray2 = [];
            for(z = 0; z <nomor.length; z++){
                if(i!==z){
                    tempArray2.push(nomor[z]);
                }
            }
            tempArray.push(tempArray2);
        }
        
        let hitungArray =[];
        
        tempArray.forEach(arr => {
            let hasil = Number(0);
           arr.forEach(e => {
               hasil=Number(hasil)+Number(e);
           });
           hitungArray.push(hasil);
        });
        
        console.log(hitungArray.sort());
        finalArray = hitungArray.sort();
    }
    return finalArray;
}

function getAngkaTerbesar(arr){
    let arrSorted = filter(arr);
    var angkaTerbesar = arrSorted[arrSorted.length-1];
    return angkaTerbesar;
}

function getAngkaTerkecil(arr){
    let arrSorted = filter(arr);
    var angkaTerkecil = arrSorted[0];
    return angkaTerkecil;

}//test

const nomor =[1,2,3,4,5];

var angkaBesar = getAngkaTerbesar(nomor);
console.log(angkaBesar)

var angkaKecil =  getAngkaTerkecil(nomor);
console.log(angkaKecil)


