// import * as React from 'react';
// import {useState} from 'react' ;


// export default function LoginPage() {
//   const [name, setname] = useState('') ;
//   const [password, setPassword] = useState('') ;

//   const handleInput = (e)=> {
//     console.log(e) 
//   }

//   return (
    
      
//       <div>
//       <form>
//       <label>Enter your name:
        
//       </label>
//       <input type="text" />
//       <br/>
//       <label>Password:
        
//         </label>
        
//         <input type="password" />

//         <input type='button' onClick="handleInput"> </input>
//      </form>

//       </div>
    
//   );
// }
import React,{useEffect, useState} from 'react';
import { useNavigate } from 'react-router-dom';

function LoginPage(){

    const [name,setEmail] = useState();
    const [password,setPassword] = useState();
    const navigate = useNavigate("");


    // useEffect(() => {
    //     const auth = localStorage.getItem("user");
    //     if(auth) {
    //         navigate('/');
    //     }
    // },[]);

    function Email(event){
        setEmail(event.target.value);
    }

    function Password(event){
        setPassword(event.target.value);
    }

    async function handleLogin(){
        let result = await fetch("http://localhost:8080/CheckAccess",{
            method:"post",
            body:JSON.stringify({name,password}),
            headers:{'Content-Type': 'application/json'}
        });
        result = await result.json();
        console.warn(result);
        if(result){
            // navigate("/");
            //alert("All Ok");
            navigate("/content")
        }else{
            alert("Please enter correct details");
        }
    }

    return (
        <div className='login'> 
            <h1>Login</h1>
            <input 
                type="email" 
                className='inputBox'
                placeholder="Email" 
                value={name}
                onChange={Email}
             />
            <input 
                type="password" 
                className='inputBox'
                placeholder="Password" 
                value={password}
                onChange={Password} 
            />
            <button onClick={handleLogin} className="button">Login</button>
        </div>
    );
}

export default LoginPage;