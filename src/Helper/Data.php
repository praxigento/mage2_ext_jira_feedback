<?php
/**
 * Copyright (c) 2016, Praxigento
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification, are permitted provided that the
 * following conditions are met:
 *  - Redistributions of source code must retain the above copyright notice, this list of conditions and the following
 *      disclaimer.
 *  - Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the
 *      following disclaimer in the documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES,
 * INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
 * SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 * WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */
/**
 * User: Alex Gusev <flancer64@gmail.com>
 * User: Vladimir Golobokov <vladimirg@inbox.lv>
 */
namespace Praxigento\JiraFeedback\Helper;

/**
 * Jira Feedback helper
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * Check if extension enabled in admin
     *
     * @return string|null
     */
    public function cfgAdminEnabled()
    {
        return $this->scopeConfig->isSetFlag(
            'prxgt_jfb/general/adminhtml_enabled',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
    
    /**
     * Check if extension enabled
     *
     * @return string|null
     */
    public function cfgAdminCode()
    {
        return $this->scopeConfig->getValue(
            'prxgt_jfb/general/adminhtml_feedback_code',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
    
    /**
     * Check if extension enabled in frontend
     *
     * @return string|null
     */
    public function cfgFrontendEnabled()
    {
        return $this->scopeConfig->isSetFlag(
            'prxgt_jfb/general/frontend_enabled',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
    
    /**
     * Check if extension enabled
     *
     * @return string|null
     */
    public function cfgFrontendCode()
    {
        return $this->scopeConfig->getValue(
            'prxgt_jfb/general/frontend_feedback_code',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}