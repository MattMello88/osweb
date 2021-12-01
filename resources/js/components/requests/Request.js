const sendData = (form, success, error, token = '') => {
  var formData = new FormData();
  for (var i = 0; i < form.length; ++i) {
    formData.append(form[i].name, form[i].value);
  }

  let headers = [];

  if (token == ''){
    headers = [
      ["Accept", "application/json"],
    ];
  } else {
    headers = [
      ["Accept", "application/json"],
      ["Authorization", "Bearer " + token],
    ];
  }

  fetch(form.action, {
    method: form.method.toUpperCase(),
    headers: headers,
    body: formData
  })
  .then(function(res){
    return res.json();
  })
  .then(success)
  .catch(error);
}

const getDataByForm = (form, success, error, token = '') => {

  var url = '?';
  for (var i = 0; i < form.length; ++i) {
    if (form[i].value !== ''){
      if (!form[i].value.includes('Selecione')){
        url = url + form[i].name +'='+ form[i].value + '&';
      }
    }
  }
  url = url.substring(0, url.length - 1);

  let headers = [];

  if (token == ''){
    headers = [
      ["Accept", "application/json"],
    ];
  } else {
    headers = [
      ["Accept", "application/json"],
      ["Authorization", "Bearer " + token],
    ];
  }

  fetch(form.action + url, {
    method: "GET",
    headers: headers
  })
  .then(function(res){
    return res.json();
  })
  .then(success)
  .catch(error);
}


const gridDataByForm = (form, columns, result, renderTo, limit = 20, search = false) => {
  let token = auth.getCookie("token");


  getDataByForm(form,
    function(data){
      const grid = new gridjs.Grid({
        columns: columns,
        data: result(data),
        pagination: {
          limit: limit,
        },
        search: search,
        authoWidth: true,
        fixedHeader: true,
        height: '400px',
      }).render(renderTo);
      grid.updateConfig({
        search: search,
        data: result(data),
      }).forceRender();
    },
    function(err){
      console.log(err)
    },
    token
  );
}

export {sendData, getDataByForm, gridDataByForm};
