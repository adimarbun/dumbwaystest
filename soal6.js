var data = [
    ['d', 'a', 'f', 'h', 'o'],
     ['d', 'z', 'y', 'x'],
  		['d', 'z', 'y', ]
  
  ];

	data.sort(function(a, b) {
     if (a.length > b.length) return 1;
     else if (a.length < b.length) return -1;
     return 0;
  });

  sortdata =[];
  let index =0;
  data.forEach(d=>{
      sortdata.push(d.sort());
      index++;
  })



console.log(sortdata);