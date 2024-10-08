import axios from "axios";

const HttpService = axios.create({
  baseURL: "http://localhost:8000/api/",
  headers: {
    "Content-type": "application/json",
  },
});


export const registerUser = async(user) =>{
  return await HttpService.post('register',user)
}
export const loginUser = async(user) =>{
  return await HttpService.post('login',user)
}

export default HttpService;
