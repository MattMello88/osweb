import {getCookie} from './Auth';

let token = getCookie("token");

const headers = [
  ["Accept", "application/json"],
  ["Authorization", "Bearer " + token],
];

export const Assuntos = async ( ) => {
  let data = await fetch(url + '/api/osassunto', {
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

export const Assunto = async ( idAssunto ) => {
  let data = await fetch(url + '/api/osassunto?ID_ASSUNTO='+idAssunto, {
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

export const AssuntoByProduto = async ( idProduto ) => {
  let data = await fetch(url + '/api/osassunto?ID_PRODUTO='+idProduto, {
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

