<?php
    $urlImages = 'http://localhost/contacts/images/';

    echo json_encode(array(
        'status' => 0,
        'contacts' => [
            array(
                'id' => 1001,
                'name' => 'Jenny Stevens',
                'photo' => $urlImages.'contacts/1001.png',
                'phoneNumbers' => [
                    array(
                        'number' => 6644837394,
                        'type' => array(
                            'id' => 'M',
                            'description' => 'Mobile',
                            'icon' => $urlImages.'icons/mobile.png',
                        ),
                        'isDefault' => true
                    ),
                    array(
                        'number' => 6645688765,
                        'type' => array(
                            'id' => 'H',
                            'description' => 'Home',
                            'icon' => $urlImages.'icons/home.png',
                        ),
                        'isDefault' => false
                    ),
                    array(
                        'number' => 6645645697,
                        'type' => array(
                            'id' => 'W',
                            'description' => 'Work',
                            'icon' => $urlImages.'icons/work.png',
                        ),
                        'isDefault' => false
                    )   
                ]
            ),
            array(
                'id' => 1002,
                'name' => 'Alex Johnson',
                'photo' => $urlImages.'contacts/1002.jpg',
                'phoneNumbers' => [
                    array(
                        'number' => 6648329283,
                        'type' => array(
                            'id' => 'M',
                            'description' => 'Mobile',
                            'icon' => $urlImages.'icons/mobile.png',
                        ),
                        'isDefault' => false
                    ),
                    array(
                        'number' => 6641273627,
                        'type' => array(
                            'id' => 'W',
                            'description' => 'Work',
                            'icon' => $urlImages.'icons/work.png',
                        ),
                        'isDefault' => true
                    )   
                ]
            ),
            array(
                'id' => 1003,
                'name' => 'Mary Jones',
                'photo' => $urlImages.'contacts/1003.png',
                'phoneNumbers' => [
                    array(
                        'number' => 6646558968,
                        'type' => array(
                            'id' => 'M',
                            'description' => 'Mobile',
                            'icon' => $urlImages.'icons/mobile.png',
                        ),
                        'isDefault' => true
                    ),
                    array(
                        'number' => 6643255456,
                        'type' => array(
                            'id' => 'H',
                            'description' => 'Home',
                            'icon' => $urlImages.'icons/home.png',
                        ),
                        'isDefault' => false
                    )   
                ]
            )
        ]   
    ));
?>
