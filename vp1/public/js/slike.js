function openModal(link) {
    document.getElementById("overlay").style.display = "block"
    document.getElementById("lightbox").src = link
}

// Close the Modal
function closeModal() {
    document.getElementById("overlay").style.display = "none"
}


const slike = document.getElementsByClassName("slika")
console.log(slike)

for (let i = 0; i < slike.length; i++) {
    slike[i].addEventListener("click", function (e) {
        const link = e.target.src;
        openModal(link)
    })
}

if(!empty($greske)){
		print_r($greske);
	}
	else {
	}
