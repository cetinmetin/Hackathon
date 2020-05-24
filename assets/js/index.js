function getName(){
    const axios = require('axios'),
      jsdom = require('jsdom'),
      { JSDOM }=  jsdom,
      url = 'https://www.hepsiburada.com/cep-telefonlari-c-371965';

      axios.get(url)
  .then (response => {
    getNodes(response.data);
  })
  .catch(error => {
    console.error(error);
  })

  const getNodes = html => {
    const data = [], // Boş bir array oluşturuyoruz
    dom = new JSDOM(html), // Yeni bir JSDOM instanceı alıyoruz
    news = dom.window.document.querySelectorAll('.box'); // dom'dan gelen nodelar arasında gezerek o modülün içerisindeki a etiketlerini çekiyorum.
    news.forEach(item => { // daha sonra bu seçtiğim öğelerde dönüyorum
      data.push( // yukarıdaki boş arraye her elemanın title ve href özelliklerini atıyorum
        item.childNodes[1].getAttribute('href')
        //link: item.getAttribute('href')
      )
    });
    for(i=0;i<20;i++){
        getComments(data[i])
    }
  }
}

//---------------------------------------------------------------------------------------------------------------------

function getComments(baglanti){
    const axios = require('axios'),
      jsdom = require('jsdom'),
      { JSDOM }=  jsdom,
      url = "https://www.hepsiburada.com"+baglanti+"-yorumlari";

      axios.get(url)
  .then (response => {
    getNodes(response.data);
  })
  .catch(error => {
    console.error(error);
  })

  const getNodes = html => {
    const data = [], // Boş bir array oluşturuyoruz
    dom = new JSDOM(html), // Yeni bir JSDOM instanceı alıyoruz
    news = dom.window.document.querySelectorAll('.review-text'); // dom'dan gelen nodelar arasında gezerek o modülün içerisindeki a etiketlerini çekiyorum.
    news.forEach(item => { // daha sonra bu seçtiğim öğelerde dönüyorum
      data.push({ // yukarıdaki boş arraye her elemanın title ve href özelliklerini atıyorum
        yorum: item.innerHTML
        //link: item.getAttribute('href')
      })
    });
        console.log(data)
        
    }
        
    }



//---------------------------------------------------------------------------------------------------------------------
function getPoint(link){
 
    const axios = require('axios'),
      jsdom = require('jsdom'),
      { JSDOM }=  jsdom,
      url = link ;

      axios.get(url)
  .then (response => {
    getNodes(response.data);
  })
  .catch(error => {
    console.error(error);
  })

  const getNodes = html => {
    const data = [], // Boş bir array oluşturuyoruz
    dom = new JSDOM(html), // Yeni bir JSDOM instanceı alıyoruz
    news = dom.window.document.querySelectorAll('.ratings .active'); // dom'dan gelen nodelar arasında gezerek o modülün içerisindeki a etiketlerini çekiyorum.
    news.forEach(item => { // daha sonra bu seçtiğim öğelerde dönüyorum
      data.push( // yukarıdaki boş arraye her elemanın title ve href özelliklerini atıyorum
         item.style.width
        //link: item.getAttribute('href')
      )
    });
    puanlar =[]
   for(i=0;i<20;i++){
        console.log(data[i])
    }
    }
}

getPoint("https://www.hepsiburada.com/samsung-galaxy-m30s-64-gb-samsung-turkiye-garantili-p-HBV00000NBF6V-yorumlari")