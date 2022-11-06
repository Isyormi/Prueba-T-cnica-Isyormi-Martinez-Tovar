const imageUser = document.getElementById('imageUser');
const nameUser = document.getElementById('nameUser');
const bioUser = document.getElementById('bioUser');

async function getProfile(name){
    // https://api.github.com/users/YOUR_NAME
    let user = await fetch( `https://api.github.com/users/${ name }` )
                                .then( resp => resp.json() )
                                .then( json => { return json } );

    imageUser.style.background = `url( '${ user.avatar_url }' ) 50% 50% / cover no-repeat`;
    nameUser.innerText=user.login;
    bioUser.innerText=user.bio;
}
