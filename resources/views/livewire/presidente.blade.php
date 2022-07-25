
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Cedula</th>
                            <th>F_posicion</th>
                          
                          
                        </tr>
                    </thead>
                 
                        @foreach ($p as $item)
                        <tr>
                            <td>
                               {{$item->id}}
                            </td>
                            <td>
                                {{$item->nom}}
                            </td>
                            <td>
                                {{$item->ape}}
                            </td>
                            <td>
                                {{$item->ced}}
                            </td>
                            <td>
                                {{$item->f_po}}
                            </td>
                          

                        </tr>
                        @endforeach
                
                 
         
    
      
       
