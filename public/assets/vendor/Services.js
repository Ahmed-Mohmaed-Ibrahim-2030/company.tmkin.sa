let url='http://company.tmkin.sa/api/'
function getservice(action,select,id) {

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
        // console.log(response.services);
        // location.replace(' https://youtube.com');
    //  location.replace('http://127.0.0.1:8001/payment/'+response.id);
    document.getElementById(select).innerHTML="";
    let newSelect="";
    console.log(response[select]);
response[select].forEach(function(e){
newSelect=document.createElement('option');
//if(!e.name_en.includes('Riyadh')&&select!="districts"){
//    console.log("Riyadh");
//  newSelect.disabled=true;
//}
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


  let action=url+'services';
  getservice(action,'services',"id");
  action=url+'subservices/1';
getservice(action,'subservices',"service_id");

document.getElementById('services').addEventListener('change',function (e) {
  console.log(e.currentTarget.value);
     action=url+'subservices/'+e.currentTarget.value;
  getservice(action,'subservices',"subservices_id");

})

