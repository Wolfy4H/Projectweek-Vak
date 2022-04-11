const button = document.querySelector("#pokemon");

fetch("https://pokeapi.co/api/v2/pokemon/%22")
  .then((response) => {
    return response.json();
  })
  .then((data) => {
    data.results.forEach((data) => {
      button.innerHTML += "<div>" + data["name"] + "</div";
    });
    console.log(data);
  })
  .catch((e) => {
    console.log(e);
  });
