<?php

    $entity = $vars['entity'];
    $user = new stdClass();
    
    $user->name = $entity->name;
    $user->image = $entity->getIcon('medium');
    $user->link = $entity->getUrl();
    $user->bio = $entity->briefdescription ? $entity->briefdescription : "";
    $user->website = $entity->website;
    $user->email = $entity->email;
    
    
    echo json_encode($user);