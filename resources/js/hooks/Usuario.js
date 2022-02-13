import {getCookie} from './Auth';

let token = getCookie("token");

const headers = [
  ["Accept", "application/json"],
  ["Authorization", "Bearer " + token],
];

export const FuncionarioUsuarios = async ( ) => {
  let data = await fetch(url + '/api/osusuariofuncionario', {
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

export const FuncionarioUsuario = async ( idUsuario ) => {
  let data = await fetch(url + '/api/osusuariofuncionario?ID_USUARIO='+idUsuario, {
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
