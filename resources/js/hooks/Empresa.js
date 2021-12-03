import {getCookie} from './Auth';

let token = getCookie("token");

const headers = [
  ["Accept", "application/json"],
  ["Authorization", "Bearer " + token],
];

export const Empresas = async ( ) => {
  let data = await fetch(url + '/api/osempresa', {
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

export const Empresa = async ( idEmpresa ) => {
  let data = await fetch(url + '/api/osempresa?ID_EMPRESA='+idEmpresa, {
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
