<?php

namespace DeliciousBrains\WP_Offload_Media\Aws3;

// This file was auto-generated from sdk-root/src/data/route53-recovery-control-config/2020-11-02/waiters-2.json
return ['version' => 2, 'waiters' => ['ClusterCreated' => ['description' => 'Wait until a cluster is created', 'operation' => 'DescribeCluster', 'delay' => 5, 'maxAttempts' => 26, 'acceptors' => [['state' => 'success', 'matcher' => 'path', 'argument' => 'Cluster.Status', 'expected' => 'DEPLOYED'], ['state' => 'retry', 'matcher' => 'path', 'argument' => 'Cluster.Status', 'expected' => 'PENDING'], ['state' => 'retry', 'matcher' => 'status', 'expected' => 500]]], 'ClusterDeleted' => ['description' => 'Wait for a cluster to be deleted', 'operation' => 'DescribeCluster', 'delay' => 5, 'maxAttempts' => 26, 'acceptors' => [['state' => 'success', 'matcher' => 'status', 'expected' => 404], ['state' => 'retry', 'matcher' => 'path', 'argument' => 'Cluster.Status', 'expected' => 'PENDING_DELETION'], ['state' => 'retry', 'matcher' => 'status', 'expected' => 500]]], 'ControlPanelCreated' => ['description' => 'Wait until a control panel is created', 'operation' => 'DescribeControlPanel', 'delay' => 5, 'maxAttempts' => 26, 'acceptors' => [['state' => 'success', 'matcher' => 'path', 'argument' => 'ControlPanel.Status', 'expected' => 'DEPLOYED'], ['state' => 'retry', 'matcher' => 'path', 'argument' => 'ControlPanel.Status', 'expected' => 'PENDING'], ['state' => 'retry', 'matcher' => 'status', 'expected' => 500]]], 'ControlPanelDeleted' => ['description' => 'Wait until a control panel is deleted', 'operation' => 'DescribeControlPanel', 'delay' => 5, 'maxAttempts' => 26, 'acceptors' => [['state' => 'success', 'matcher' => 'status', 'expected' => 404], ['state' => 'retry', 'matcher' => 'path', 'argument' => 'ControlPanel.Status', 'expected' => 'PENDING_DELETION'], ['state' => 'retry', 'matcher' => 'status', 'expected' => 500]]], 'RoutingControlCreated' => ['description' => 'Wait until a routing control is created', 'operation' => 'DescribeRoutingControl', 'delay' => 5, 'maxAttempts' => 26, 'acceptors' => [['state' => 'success', 'matcher' => 'path', 'argument' => 'RoutingControl.Status', 'expected' => 'DEPLOYED'], ['state' => 'retry', 'matcher' => 'path', 'argument' => 'RoutingControl.Status', 'expected' => 'PENDING'], ['state' => 'retry', 'matcher' => 'status', 'expected' => 500]]], 'RoutingControlDeleted' => ['description' => 'Wait for a routing control to be deleted', 'operation' => 'DescribeRoutingControl', 'delay' => 5, 'maxAttempts' => 26, 'acceptors' => [['state' => 'success', 'matcher' => 'status', 'expected' => 404], ['state' => 'retry', 'matcher' => 'path', 'argument' => 'RoutingControl.Status', 'expected' => 'PENDING_DELETION'], ['state' => 'retry', 'matcher' => 'status', 'expected' => 500]]]]];
