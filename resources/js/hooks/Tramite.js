import {getCookie} from './Auth';

let token = getCookie("token");

const headers = [
  ["Accept", "application/json"],
  ["Authorization", "Bearer " + token],
];

export const Tramites = async ( ) => {
  let data = await fetch(url + '/api/ostramite', {
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

export const Tramite = async (id) => {
  let data = await fetch(url + '/api/ostramite/' + id, {
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
