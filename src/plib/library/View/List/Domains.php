<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH.
class Modules_SecurityAdvisor_View_List_Domains extends Modules_SecurityAdvisor_View_List_Common
{
    protected function _getTools()
    {
        $tools = [];
        if ($this->_isLetsEncryptInstalled) {
            $letsEncryptUrl = pm_Context::getActionUrl('index', 'letsencrypt');
            $tools[] = [
                'title' => $this->lmsg('list.domains.letsencryptDomains'),
                'description' => $this->lmsg('list.domains.letsencryptDomainsDescription'),
                'execGroupOperation' => $letsEncryptUrl,
            ];
        } else {
            $installUrl = pm_Context::getActionUrl('index', 'install-letsencrypt');
            $tools[] = [
                'title' => $this->lmsg('list.domains.installLetsencrypt'),
                'description' => $this->lmsg('list.domains.installLetsencryptDescription'),
                'link' => "javascript:Jsw.redirectPost('{$installUrl}')",
            ];
        }
        return $tools;
    }

    protected function _getSearchFilters()
    {
        return [
            'domainName' => [
                'title' => $this->lmsg('list.domains.domainNameColumn'),
                'fields' => ['domainName'],
            ],
            'hiddenStatus' => [
                'title' => $this->lmsg('list.domains.search.status.column'),
                'fields' => ['hiddenStatus'],
                'options' => [
                    '' => $this->lmsg('list.domains.search.status.any'),
                    'insecure' => $this->lmsg('list.domains.search.status.insecure'),
                    'secure' => $this->lmsg('list.domains.search.status.secure'),
                ],
            ],
            'subscription' => [
                'title' => 'Subscription',
                'fields' => ['hiddenSubscription'],
            ],
            'subscribers' => [
                'title' => 'Subscribers',
                'fields' => ['hiddenSubscriber'],
            ],
        ];
    }
}
