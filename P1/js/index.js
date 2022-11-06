

const arrValidation = ["doublevpartners", ""];

const inputSearch = document.getElementById('inputSearch');
const listSearch = document.getElementById('listSearch');
//consultar el valor
async function mySearch(){
    let  _xValues = [];
    let  _yValues = [];

    clearItemsUl();
    name = inputSearch.value;

    if ( !myValidator( name ) ){
      return false;
    }


    let { items = [] } = await fetch( `https://api.github.com/search/users?q=${ name }` )
                                .then( resp => resp.json() )
                                .then( json => { return json } );

    for (var i = 0; i < 10; i++){
      addItemsUl( items[i].login , items[i].id );
      _xValues.push( items[i].login );

      let { followers = 0 } = await fetch( `https://api.github.com/users/${ items[i].login }` )
                                  .then( resp => resp.json() )
                                  .then( json => { return json } );
      _yValues.push( followers );
    }


    // _xValues = ["Italy1", "France1", "Spain1", "USA1", "Argentina1","Italy1", "France1", "Spain1", "USA1", "Argentina1"];
    // _yValues = [3, 3, 3, 3, 6,6, 6, 3, 3, 3];
    myChart.data.datasets[0].data = _yValues;
    myChart.data.labels = _xValues;
    myChart.update();

}

function myValidator( name ){
  if( arrValidation.includes( name ) || name.length < 4 ){
    clearItemsUl("Error : the field value must have more than 3 characters and must be different from 'doublevpartners'*.");
    return false;
  }
  return true;
}

//agregar un registro a la lista
function addItemsUl(login , id){
  //Element li
  const li = document.createElement('li');
  li.classList.add('list-group-item');
  //Element a
  const a = document.createElement('a');
  a.innerHTML = `<i class="fas fa-user"></i>
                 <b> user.login : </b> ${ login } -<b> user.id : </b>${ id }`;

  a.classList.add('text-muted');
  a.href = `./profile.php?q=${ login }`;


  li.appendChild(a);
  listSearch.appendChild(li);

}
//limpiar la lista
function clearItemsUl( msg = null ){
  listSearch.innerHTML = '';

  if( msg !== null ) {
      const li = document.createElement('li');
      li.classList.add('list-group-item');
      li.classList.add('text-danger');
      li.innerText = '* ' + msg ;
      listSearch.appendChild( li );
  }

}
