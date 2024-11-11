<div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f7f7f7; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <div style="background-color: #333; padding: 20px; border-radius: 10px 10px 0 0; color: white; text-align: center;">
        <h2>Xin chào {{ $account->name }}</h2>
        <p>Chúc mừng bạn đã đăng ký tài khoản thành công tại LacquerCrafts!</p>
    </div>

    <div style="padding: 20px; background-color: white; border-radius: 0 0 10px 10px;">
        <p style="font-size: 16px; color: #333;">Thông tin tài khoản của bạn:</p>

        <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
            <tr>
                <td style="padding: 10px; background-color: #f2f2f2; font-weight: bold;">Email:</td>
                <td style="padding: 10px; background-color: #f9f9f9;">{{ $account->email }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; background-color: #f2f2f2; font-weight: bold;">Họ tên:</td>
                <td style="padding: 10px; background-color: #f9f9f9;">{{ $account->name }}</td>
            </tr>
            {{-- <tr>
                <td style="padding: 10px; background-color: #f2f2f2; font-weight: bold;">Giới tính:</td>
                <td style="padding: 10px; background-color: #f9f9f9;">{{ $account->gender }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; background-color: #f2f2f2; font-weight: bold;">Ngày sinh:</td>
                <td style="padding: 10px; background-color: #f9f9f9;">{{ $account->birthday }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; background-color: #f2f2f2; font-weight: bold;">Số điện thoại:</td>
                <td style="padding: 10px; background-color: #f9f9f9;">{{ $account->phone }}</td>
            </tr>
            <tr>
                <td style="padding: 10px; background-color: #f2f2f2; font-weight: bold;">Địa chỉ:</td>
                <td style="padding: 10px; background-color: #f9f9f9;">{{ $account->address }}</td>
            </tr> --}}
        </table>

        {{-- <p style="font-size: 16px; color: #333;">Vui lòng nhấn vào nút bên dưới để kích hoạt tài khoản và đăng nhập ngay:</p>

        <p style="text-align: center;">
            <a href="" style="background-color: #333; color: white; padding: 10px 20px; text-align: center; text-decoration: none; font-size: 16px; border-radius: 5px;">
                Kích hoạt tài khoản
            </a>
        </p> --}}

        <p style="font-size: 14px; color: #666;">Nếu bạn không thực hiện đăng ký này, vui lòng bỏ qua email này.</p>

        <p style="font-size: 14px; color: #333;">Trân trọng,<br>
        Đội ngũ hỗ trợ </p>
    </div>
</div>
