<?php
      echo form_open('home/tambah', array('enctype'=>'multipart/form-data')); 
       ?>
      <table>
        <?php echo validation_errors(); ?>
        <tr>
          <td>Judul</td>
          <td>:</td>
          <td><input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>"></td>
        </tr>
        <tr>
          <td>Content</td>
          <td>:</td>
          <td><input type="text" name="input_content" value="<?php echo set_value('input_content'); ?>"></td>
        </tr>
        <tr>
          <td>Tanggal </td>
          <td>:</td>
          <td><input type="text" name="input_tanggal" value="<?php echo set_value('input_tanggal'); ?>"></td>
        </tr>
        <tr>
          <td>Gambar</td>
          <td>:</td>
          <td><input type="file" name="input_gambar"></td>
        </tr>
        <tr>
          <td>Penulis </td>
          <td>:</td>
          <td><input type="text" name="input_penulis" value="<?php echo set_value('input_penulis'); ?>"></td>
        </tr>
        <tr>
          <td>Sumber </td>
          <td>:</td>
          <td><input type="text" name="input_sumber" value="<?php echo set_value('input_sumber'); ?>"></td>
        </tr>
        <tr>
          <td>Lokasi Penulis </td>
          <td>:</td>
          <td><input type="text" name="input_lokasi_penulis" value="<?php echo set_value('input_lokasi_penulis'); ?>"></td>
        </tr>

        <tr>
          <td colspan="3"><input type="submit" name="simpan" value="<?php echo set_value('input_gambar'); ?>simpan"></td>
        </tr>

      </table>
    </div>