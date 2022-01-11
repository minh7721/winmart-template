<?php
include('function.php');
include('header.php');
$idsp = $_GET['idsp'];
?>

<div class="container-fluid" style="background-color: #f1f0f1;">
  <div class="container">
    <div class="card mb-3">
      <div class="row g-0">
        <?php
        $showProducts = showProduct($idsp);
        $row = mysqli_fetch_assoc($showProducts);
        ?>
        <div class="col-md-4">
          <img src="./img/img-product/<?php echo $row['image'] ?>" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <form method="POST">
              <h5 class="card-title"><?php echo $row['name'] ?></h5>
              <p>Giá bán lẻ: <span style="font-weight: bold; line-height: 1.5;"><span class="giaBanSP"><?php echo $row['giaBan']?></span><span> đ</span></span></p>
              <p>Tình trạng: <?php if ($row['soLuong'] > 0) {
                                echo "Còn hàng";
                              } else {
                                echo "Hết hàng";
                              }
                              ?></p>
              <p>Mô tả: Táo Queen New Zealand PG size 90-120 được lai tạo giữa táo Gala và táo Splendour, là loại táo nổi tiếng về độ ngọt, rất giòn nhưng không quá cứng, màu sắc đỏ thẫm. Táo Queen PG có quả tròn, vỏ mỏng có màu sắc đỏ thẫm, trọng lượng khoảng 7 đến 8 quả/kg. Không chỉ vậy, táo còn rất thơm, nhiều nước và được xem là một trong những loại Táo New Zealand phù hợp nhất với khẩu vị của người Việt Nam.</p>
              <p>Đơn vị tính: <?php echo $row['donViTinh'] ?></p>
              <input class="p-1" type="number" min=1 max=10 value="1">
              <div class="row">
                <a style="margin-left: 12px;width:150px;" name="addSPtoCart" giaBan="<?php echo $row['giaBan'] ?>" p_id="<?php echo $row['id']; ?>" class="btn btn-outline-danger mt-4 btnAddCart">Thêm vào giỏ</a>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>
<?php
include('footer.php');
?>
<script>
  $('.btnAddCart').click(function() {
    p_id = $(this).attr('p_id');
    k_id = 1;
    giaBan = $(this).attr('giaBan');
    action = "addSPtoCart";
    $.ajax({
      url: "product_action.php",
      method: "POST",
      data: {
        p_id: p_id,
        k_id: k_id,
        giaBan: giaBan,
        action: action
      },
      success: function(ketQua) {

      }
    })
  })
</script>
<script>
        const hashPrice = (text) => {
            let arr = text.split('').reverse();
            const newArr = [];
            arr.forEach((e, i) => {
                if ((i) % 3 === 0 && i !== 0) {
                    newArr.push('.');
                    newArr.push(e);
                } else {
                    newArr.push(e);
                }
            });
            return newArr.reverse().join('');
        }
        console.log(hashPrice("1000"));
        const arr = Array.from(document.querySelectorAll(".giaBanSP"));
        arr.forEach((e) => {
            let number = e.textContent;
            e.textContent = hashPrice(number);
        })
    </script>