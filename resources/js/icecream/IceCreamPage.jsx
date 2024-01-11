
import React, { useEffect, useState } from 'react';
import { createRoot } from 'react-dom/client'
import ReactDOM, { render } from 'react-dom';
import '../../css/app.css'
export default function IceCreamPage(props){

    const [state, setState] = useState({
        icecreams:JSON.parse(props.icecreams)
    
      });
      const {icecreams} = state;
    useEffect(() => {
      console.log('props ice cream',icecreams)
    
      
    }, [])
    
    return(
        <div className='icecream_container' >
            <table>
                <thead>
                    <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>

                    </tr>
                    


                </thead>

                <tbody>
                    {
                        icecreams.length>0?(
                            icecreams.map((icecream)=>(
                                <tr key={icecream.id}>
                                    <td>
                                        {icecream.name}

                                    </td>
                                    <td>
                                        {icecream.price}

                                    </td>
                                    <td>
                                        {icecream.description}

                                    </td>

                                    <td>
                                        <button>Editar</button>
                                        <button>Eliminar</button>
                                    </td>
                                </tr>

                            ))
                            

                        ):(
                            <div>
                                No se han encontrado resultados
                            </div>
                        )
                    }




                </tbody>
            </table>


        </div>
    );
}

/*if (document.getElementById('icecreampage')) {
    
    const thisElement = document.getElementById('icecreampage');
    let props = Object.assign({}, thisElement.dataset);
    console.log("props", props)
    ReactDOM.render(<IceCreamPage {...props} />, thisElement);
    

  }*/

if(document.getElementById('icecreampage')){
    const thisElement = document.getElementById('icecreampage');
    let props = Object.assign({}, thisElement.dataset);
    createRoot(document.getElementById('icecreampage')).render(<IceCreamPage {...props}/>)
}

/*
if (document.getElementById('indexcancel')) {
    const thisElement = document.getElementById('indexcancel');
    let props = Object.assign({}, thisElement.dataset);
    console.log("props", props)
    ReactDOM.render(<IndexCancel {...props} />, thisElement);
}
*/