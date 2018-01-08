<?php

echo password_hash("mypassword", PASSWORD_DEFAULT);

echo password_verify("mypassword",
	'$2y$10$ygRKV8zNLZ583eVUV8WtruBdqwxlyRBqHpv.HP8/u3JCx3n6Pus.i');

?>