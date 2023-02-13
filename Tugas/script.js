const submit = document.querySelector(".container form .button .submit");

submit.addEventListener("click", function () {
        const details = document.querySelector(".details");

        details.classList.toggle("visible");

        const fname = document.forms['forms']['firstname'].value;
        const lname = document.forms['forms']['lastname'].value;
        const h1 = document.createElement("h2");
        h1.textContent = `Nama : ${fname}  ${lname}`;
        details.appendChild(h1);

        const address = document.forms['forms']['address'].value;
        const h2 = document.createElement("h2");
        h2.textContent = `Alamat : ${address}`;
        details.appendChild(h2);

        const birth = document.forms['forms']['birth'].value;
        const h3 = document.createElement("h2");
        h3.textContent = `Tanggal Lahir : ${birth}`;
        details.appendChild(h3);

        const profession = document.forms['forms']['profession'].value;
        const h4 = document.createElement("h2");
        h4.textContent = `Pekerjaan : ${profession}`;
        details.appendChild(h4);
    }
)

const close = document.querySelector(".details span");

close.addEventListener("click", function () {
    const details = document.querySelector(".details");

    details.classList.toggle("visible");
})