
 const logoblock = document.getElementById('logoblock');
 const navblock = document.getElementById('navblock');
(()=>{
    webload = setInterval(() => {
        if(screen.width < 1200){

           if(logoblock.classList.contains('col-xl-3')){
            logoblock.removeAttribute('class')
            navblock.removeAttribute('class')
            logoblock.setAttribute('class','col-xl-9 col-lg-8 col-md-8 col-sm-8 col-8')
            navblock.setAttribute('class','col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4')
           }

            
        }else{

            if(logoblock.classList.contains('col-xl-9')){
                logoblock.removeAttribute('class')
                navblock.removeAttribute('class')
                navblock.setAttribute('class','col-xl-9 col-lg-8 col-md-8 col-sm-8 col-8')
                logoblock.setAttribute('class','col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4')
               }

        

        }
    }, 1000);
})();
