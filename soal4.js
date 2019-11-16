
function hitungHargaDiskon(biaya,voucher){
    let diskon=0;

    switch(voucher){
    case "DumbWaysAsik":
        let disc = 50/100;
        let maxPotongan = 20000;
        if(biaya>=20000){
            potongan = disc * biaya;
            if(potongan>maxPotongan){
                potongan = maxPotongan;
            }
            diskon = potongan;
        }
      

        break;
        case "DumbWaysMantap":
        disc = 30/100;
        maxPotongan = 40000;
        if(biaya>=50000){
            potongan = disc * biaya;
            if(potongan>maxPotongan){
                potongan = maxPotongan;
            }
            diskon = potongan;
        }
    
        break;
    }
    return diskon;
}

function VoucherDumbwaysMall(biaya,voucher){
    let diskon =  hitungHargaDiskon(biaya,voucher);
    let hargaBayar = biaya - diskon;
    let cashback = diskon;

    return  "-uang yang harus dibayar = "+hargaBayar + " -diskon : "+diskon +" -Kembalian :"+cashback;
}


console.log(VoucherDumbwaysMall(30000,"DumbWaysMantap"))
console.log(VoucherDumbwaysMall(50000,"DumbWaysMantap"))
console.log(VoucherDumbwaysMall(500000,"DumbWaysMantap"))
