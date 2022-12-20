function getlocation(action,select,id) {

  fetch(action, {
    method: 'get',
  url:action,

  //  body: formData,
    headers: {'X-Requested-With': 'XMLHttpRequest'}
  })
  .then(response => {
    return response.text();
  })
  .then(data => {
      let response=JSON.parse(data);
      console.log(response.id);
    // thisForm.querySelector('.loading').classList.remove('d-block');
    if (response.data=="OK") {
      //thisForm.querySelector('.sent-message').classList.add('d-block');
    //  thisForm.reset();

    }
    else if(response.type ==select)
    {
        // console.log(response.regions);
        // location.replace(' https://youtube.com');
    //  location.replace('http://127.0.0.1:8001/payment/'+response.id);
    document.getElementById(select).innerHTML="";
    let newSelect="";
    console.log(response[select]);
response[select].forEach(function(e){
newSelect=document.createElement('option');
if(!e.name_en.includes('Riyadh')&&select!="districts"){
  newSelect.disabled=true;
}
newSelect.value=e[id];
newSelect.innerHTML=e.name_ar;
  document.getElementById(select).appendChild(newSelect);
})
    }
    else{
      throw new Error(data ? data : 'Form submission failed and no error message returned from: ' + action);
    }
  })
  .catch((error) => {
    console.log( error);
  });

}

document.getElementById('getLocation').addEventListener('click',function () {
  let action='http://127.0.0.1:8001/api/regions';
  getlocation(action,'regions',"region_id");
  action='http://127.0.0.1:8001/api/cities/1';
getlocation(action,'cities',"city_id");
action='http://127.0.0.1:8001/api/districts/3';
getlocation(action,'districts',"district_id");


})
document.getElementById('regions').addEventListener('change',function (e) {
  console.log(e.currentTarget.value);
    let action='http://127.0.0.1:8001/api/cities/'+e.currentTarget.value;
  getlocation(action,'cities',"city_id");

})
document.getElementById('cities').addEventListener('change',function (e) {
  console.log(e.currentTarget.value);
    let action='http://127.0.0.1:8001/api/districts/'+e.currentTarget.value;
  getlocation(action,'districts',"district_id");

})
