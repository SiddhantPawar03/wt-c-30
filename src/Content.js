import {useState} from 'react' ;
const Content  =  () => {
   const[items, setItems] = useState([
    {
        id : 1 ,
        item : "book1",
        checked : false
    },
    {
        id : 2 ,
        item : "book2",
        checked : false
    },
    {
        id : 3 ,
        item : "book3",
        checked : false
    }
   ])  ; 
   const handleCheck= (id) => {
       const newList = items.map((item)=> item.id === id ? {...item , checked: !item.checked} : item)
       setItems(newList)
   }
   const handleSubmit= () => {
    var s = ""
    var val = items.map((item => item.checked ? s+=item.item:s+='')) ;
    const object = {id : 1, book_name: val[2]} ;
    console.log(object) ; 

    fetch("http://localhost:8080/SaveUser" , {
        method: "POST",
        headers:{"Content-Type":"application/json"},
        body : JSON.stringify(object)
    }).then(()=>{
        console.log("Succeed") ;
    })
    

   }
   
    return(
        <main>
            <ul>
                {items.map((item)=> (
                    <li className="item" key={item.id}>
                        <input type="checkbox" checked = {item.checked} onChange={()=> handleCheck(item.id)}></input>
                        <label>{item.item}</label>

                    </li>
                ))
                }
            </ul>
            {/* <input type="button" ></input> */}
            <button className="contentButton" onClick={handleSubmit}>Submit</button>
        </main>
    )

}
export default Content ; 