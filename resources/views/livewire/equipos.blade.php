 <thead>
                        <tr>
                            <th>ID</th>
                            <th>N_equipo</th>
                            <th>Logo</th>
                            <th>Ciudad</th>
                          
                          
                        </tr>
                    </thead>
               
                        @foreach ($e as $item)
                        <tr>
                            <td>
                               {{$item->id}}
                            </td>
                            <td>
                                {{$item->n_eq}}
                            </td>
                            <td>
                                {{$item->log}}
                            </td>
                            <td>
                                {{$item->cid}}
                            </td>
                          

                
                        </tr>
                        @endforeach
                   
                   
               