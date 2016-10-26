<?php
class Sample_UserManager
{
    public function auth($mailaddress, $password)
    {
        // ダミー
        if ($mailaddress != $password) {
            return Ethna::raiseNotice('メールアドレスまたはパスワードが正しく有りません', E_SAMPLE_AUTH);
        }
        // 成功時にはnullを返す
        return null;
    }
}
