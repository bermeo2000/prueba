
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Cedula</th>
                            <th>N_camiseta</th>
                            <th>Posicion</th>
                          
                        </tr>
                    </thead>
                
                        @foreach ($j as $item)
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
                                {{$item->n_ca}}
                            </td>
                            <td>
                                {{$item->pos}}
                            </td>

                        </tr>
                        @endforeach
                     
                    
               