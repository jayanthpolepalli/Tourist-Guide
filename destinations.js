function createcard() {
    container = document.createElement('div'); 
    container.classList.add("card-container");
    link=document.createElement('a');
    container.append(link);
    image = document.createElement('img');
    image.classList.add("card-img");
    image.src ="images/"+pic;
    link.append(image);
    link.target='_blank';
    link.href='details.php?p='+h;
    link.style.color='black';
    box = document.createElement('div')
    box.classList.add("card-box");
    link.append(box)
    content = document.createElement('div')
    content.classList.add("card-content");
    content.classList.add("font");
    box.append(content)
    heading = document.createElement('p');
    heading.classList.add("font")
    heading.classList.add("card-heading")
    heading.innerHTML=h;    
    content.append(heading)
    matter = document.createElement("p")
    matter.innerHTML=m;
    content.append(matter)
    document.querySelector(".locations").append(container)
}