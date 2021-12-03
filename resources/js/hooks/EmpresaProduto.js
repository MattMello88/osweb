import {getCookie} from './Auth';

let token = getCookie("token");

const headers = [
  ["Accept", "application/json"],
  ["Authorization", "Bearer " + token],
];

export const EmpresaProdutos = async ( idEmpresa ) => {
  let data = await fetch(url + '/api/osempresaproduto?ID_EMPRESA='+idEmpresa, {
    method: "GET",
    headers: headers
  })
  .then(function(res){
    return res.json();
  })
  .then(function(data){
    return data
  })
  .catch(function(err){
    console.log(err)
  });

  return data
}

export const EmpresaProduto = async ( idEmpresa, idProduto ) => {
  let data = await fetch(url + '/api/osempresaproduto?ID_EMPRESA='+idEmpresa+'&ID_PRODUTO='+idProduto, {
    method: "GET",
    headers: headers
  })
  .then(function(res){
    return res.json();
  })
  .then(function(data){
    return data
  })
  .catch(function(err){
    console.log(err)
  });
  return data;
}
