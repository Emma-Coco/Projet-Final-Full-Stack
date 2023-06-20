<!DOCTYPE html>
<html>

<head>
  <title>Réservation de logement</title>
</head>
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
    color: #ffd700;
    font-size: 20px;
  }

  .star {
    display: inline-block;
  }

  .message-button,
  .edit-button,
  .delete-button {
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

  .message-button:hover,
  .edit-button:hover,
  .delete-button:hover {
    background-color: #45a049;
  }
</style>

<body>
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

    <p>Reservation en cours...</p>

    <p>Question sur ma réservation en cours :</p>
    <?php include '../vue/client/segment_messageries.php'; ?>

    <style>
      .send-button {
        display: block;
        width: 50%;
        padding: 10px;
        margin-top: 10px;
        font-size: 16px;
        text-align: center;
        background-color: green;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
      }

      .message-field {
        display: block;
        width: 94%;
        padding: 10px;
        margin-top: 10px;
        font-size: 16px;
        border-radius: 3px;
        resize: none;
      }
    </style>
  </div>
</body>

</html>