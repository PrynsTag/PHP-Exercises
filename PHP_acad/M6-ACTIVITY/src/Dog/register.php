<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/PHP_acad/M6-ACTIVITY/templates/header.php" ?>
<form action="signup.php" method="post">
  <table>
    <tbody>
    <tr>
      <th>Dog Information</th>
    </tr>
    <tr>
      <label>
        <td>
          Name <br>
          <input type="text" name="name" maxlength="30">
        </td>
      </label>
    </tr>

    <tr>
      <label>
        <td>
          Breed <br>
          <input type="text" name="breed" maxlength="30">
        </td>
      </label>
    </tr>

    <tr>
      <label>
        <td>
          Age <br>
          <input type="text" name="age" maxlength="30">
        </td>
      </label>
    </tr>

    <tr>
      <label>
        <td>
          Address <br>
          <input type="text" name="address" maxlength="30">
        </td>
      </label>
    </tr>

    <tr>
      <label>
        <td>
          Color <br>
          <input type="text" name="color" maxlength="30">
        </td>
      </label>
    </tr>

    <tr>
      <label>
        <td>
          Height <br>
          <input type="text" name="height" maxlength="30">
        </td>
      </label>
    </tr>

    <tr>
      <label>
        <td>
          Weight <br>
          <input type="text" name="weight" maxlength="30">
        </td>
      </label>
    </tr>
    </tbody>

    <tfoot>
    <tr>
      <td>
        <input type="submit" name="submit" value="save">
      </td>
    </tr>
    </tfoot>
  </table>
  © Prince Carl Velasco
</form>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/PHP_acad/M6-ACTIVITY/templates/footer.php" ?>
