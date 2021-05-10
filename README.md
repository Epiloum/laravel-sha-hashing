## SHA-512 Hashing for Laravel Framework

이 예제는 Laravel 프레임워크의 기본 해싱함수인 bcrypt를 sha512로 변경하는 과정을 담고 있습니다. 구체적으로는 아래와 같은 흐름으로 작성되었습니다.

- Composer로 Laravel 프레임워크를 설치합니다.
- master 브랜치에서 PHP-fcm, Nginx, MariaDB를 담은 Docker Compose 환경을 세팅합니다. 이것은 로컬 환경에서 테스트를 하기 위해 진행하는 과정입니다.
- jetstream-inertia 브랜치를 분리하여, [Laravel Jetstream](https://jetstream.laravel.com "Laravel Jetstream")으로 [Inertia](https://inertiajs.com "Inertia")를 설치합니다. 이것은 Inertia가 자동으로 생성해주는 회원가입/로그인 기능을 통해 변경한 해시함수가 DB에 저장되는지를 손쉽게 확인하기 위한 과정입니다.
- ⭐️마지막으로 hasher 브랜치를 분리하여, SHA-512 해셔 클래스를 구현하고, 이를 서비스 프로바이더를 통해 바인딩하며, 마지막으로 환경설정에서 해시함수를 변경하여서 이를 적용합니다.   

실제로 여러분의 Laravel 프로젝트에 SHA-512 해싱을 적용할 때는 ⭐표로 표시한 [마지막 커밋](https://github.com/Epiloum/laravel-sha-hashing/commit/b1d730d771dff00f4786c6e8d7c5cc354ccef0b5  "Github Commit Link - b1d730d771dff00f4786c6e8d7c5cc354ccef0b5")만을 참고하시면 됩니다. 나머지 과정은 사실상 테스트 환경을 구축하기 위한 과정입니다.  
