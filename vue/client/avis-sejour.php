<!DOCTYPE html>
<html>

<head>
  <title>Réservation de logement</title>
  <style>
    .reservation {
      width: 400px;
      padding: 20px;
      background-color: #f2f2f2;
      margin: 20px auto;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    h2 {
      font-size: 24px;
      color: #333;
    }

    p {
      margin-bottom: 10px;
      font-size: 16px;
    }

    .reservation-date,
    .reservation-price {
      font-weight: bold;
    }

    .reservation-rating {
      font-size: 20px;
    }

    .star-container {
      display: inline-block;
    }

    .star {
      display: inline-block;
      cursor: pointer;
      color: #ffd700;
      font-size: 24px;
      margin-right: 2px;
    }

    .star:hover,
    .star.active {
      color: #ffd700;
    }

    .message-field {
      display: block;
      width: 94%;
      padding: 10px;
      margin-top: 10px;
      font-size: 16px;
      border-radius: 3px;
      resize: none;
      /* Permet le redimensionnement vertical du textarea */
    }

    .send-button {
      display: block;
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      font-size: 16px;
      text-align: center;
      background-color: #4caf50;
      color: white;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    .send-button:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <?php
  // include '../vue/header_menu.php';
  ?>
  <div class="reservation">
    <h2>
      <?php echo $detailReservation['name'] . ' : ' . $detailReservation['fullname']; ?>
    </h2>
    <p>
      Date de la réservation: <span class="reservation-date">
        <?php echo $detailReservation['starting_date'] ?> -
        <?php echo $detailReservation['ending_date'] ?>
      </span>
    </p>
    <p>Prix: <span class="reservation-price">
        <?php echo $detailReservation['final_price'] ?>€
      </span></p>
    <p>
      Ajouter un avis sur votre reservation :
      <span class="reservation-rating">
        <span class="star-container">
          <span class="star">&#9734;</span>
        </span>
        <span class="star-container">
          <span class="star">&#9734;</span>
        </span>
        <span class="star-container">
          <span class="star">&#9734;</span>
        </span>
        <span class="star-container">
          <span class="star">&#9734;</span>
        </span>
        <span class="star-container">
          <span class="star">&#9734;</span>
        </span>
      </span>
    </p>
    <form action="../controlleurs/client_controlleur.php" method="post">
      <input type="hidden" name="action" value="ajouterAvisReservation" />
      <input type="hidden" name="id_reservation" value="<?php echo $detailReservation['id']; ?>" />
      <input type="hidden" name="stars" value="0" id="input_stars">
      <textarea class="message-field" placeholder="Votre avis" name="avis"></textarea>
      <button class="send-button">Envoyer</button>
    </form>
  </div>

  <script>
    const starContainers = document.querySelectorAll(".star-container");
    let selectedStarsCount = 0;
    let lastSelectedStarIndex = -1;
    let input_stars = document.getElementById("input_stars");

    function handleStarClick(event) {
      const clickedStarContainer = event.currentTarget;
      const clickedStar = clickedStarContainer.querySelector(".star");
      const currentIndex =
        Array.from(starContainers).indexOf(clickedStarContainer);

      if (currentIndex === lastSelectedStarIndex + 1) {
        clickedStar.classList.toggle("active");

        if (clickedStar.classList.contains("active")) {
          clickedStar.innerHTML = "&#9733;";
          selectedStarsCount++;
          lastSelectedStarIndex = currentIndex;
        } else {
          clickedStar.innerHTML = "&#9734;";
          selectedStarsCount--;
          lastSelectedStarIndex = currentIndex - 1;
        }
      } else if (currentIndex === lastSelectedStarIndex) {
        clickedStar.classList.remove("active");
        clickedStar.innerHTML = "&#9734;";
        selectedStarsCount--;
        lastSelectedStarIndex--;
      }
      input_stars.value = currentIndex + 1;
    }

    function resetStars() {
      starContainers.forEach((starContainer, index) => {
        const star = starContainer.querySelector(".star");
        star.classList.remove("active");
        star.innerHTML = "&#9734;";
      });

      selectedStarsCount = 0;
      lastSelectedStarIndex = -1;
    }

    starContainers.forEach((starContainer) =>
      starContainer.addEventListener("click", handleStarClick)
    );
  </script>
</body>

</html>